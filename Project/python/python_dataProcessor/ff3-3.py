#-*- coding: utf-8 -*-
# encoding: utf-8
#from numpy import sin, linspace, pi, fft, arange
import matplotlib as pylab
from libs import peakdetect
import numpy as np
from matplotlib import figure
from pylab import *

def plot_peaks(x, indexes, algorithm=None, mph=None, mpd=None):
    """Plot results of the peak dectection."""
    try:
        import matplotlib.pyplot as plt
    except ImportError:
        print('matplotlib is not available.')
        return
    _, ax = plt.subplots(1, 1, figsize=(8, 4))
    ax.plot(x, 'b', lw=1)
    if indexes.size:
        label = 'peak'
        label = label + 's' if indexes.size > 1 else label
        ax.plot(indexes, x[indexes], '+', mfc=None, mec='r', mew=2, ms=8,
                label='%d %s' % (indexes.size, label))
        ax.legend(loc='best', framealpha=.5, numpoints=1)
    ax.set_xlim(-.02*x.size, x.size*1.02-1)
    
    ymin, ymax = x[np.isfinite(x)].min(), x[np.isfinite(x)].max()
    yrange = ymax - ymin if ymax > ymin else 1
    ax.set_ylim(ymin - 0.1*yrange, ymax + 0.1*yrange)
    
    ax.set_xlabel('Data #', fontsize=14)
    ax.set_ylabel('Amplitude', fontsize=14)
    ax.set_title('%s (mph=%s, mpd=%s)' % (algorithm, mph, mpd))
    plt.show()


def find_Peak(P):
    # Find peakload test
    Peakpoint = peakdetect.peakdetect(abs(P), lookahead=22)
    return Peakpoint
    
def plotSpectrum(y,Fs):
 """
 Plots a Single-Sided Amplitude Spectrum of y(t)
 """
 n = len(y) # length of the signal
 k = np.arange(n)
 T = n/Fs
 frq = k/T # two sides frequency range
 frqs = k/T
 frq = frq[range(n//36)] # one side frequency range
 frqs = frqs[range(n//2)]
 S = pylab.fft(y)/n
 S = S[range(n//2)]
 Y = pylab.fft(y)/n # fft computing and normalization
 Y = Y[range(n//36)]

 '''# output fft restule
 outfile = open('result.txt','w')
 for item in Y:
    outfile.writelines("%s\n" % abs(item))
 '''
 pylab.plot(frq,abs(Y),'-') # plotting the spectrum
 pylab.xlabel('Freq (Hz)')
 pylab.ylabel('Amplitude')

 # FFT原始結果
 outfile = open('result-o.txt','w')
 for item in S:
    outfile.writelines("%s\n" % abs(item))
 
 # FFT 前30 Hz結果
 outfile = open('result-30frq.txt','w')
 for item in Y:
    outfile.writelines("%s\n" % abs(item))
 
 return Y


if __name__ == "__main__":
 y = [line.rstrip('\n') for line in open('raw.txt','r')]
 N = len(y) 
 Fs = 1024.0;  # sampling rate
 Ts = 1.0/Fs; # sampling interval
 t = np.arange(N)*Ts # time vector
 
 figure.Figure(figsize=(8,4))
 subplots_adjust(hspace=.4)
 
 # 畫第1個圖
 pylab.subplot(2,1,1)
 pylab.plot(t, y, '.-')
 pylab.xlabel('Time(t)')
 pylab.ylabel('Amplitude')
 pylab.title('Raw signals Data')
 pylab.axis('tight')
 # 畫第2個圖
 pylab.subplot(2,1,2)
 
 # fft 計算後找出頻譜的數值
 
 fft_y = plotSpectrum(y,Fs)
 
 indexes = []
 peaks = find_Peak(fft_y)
 i = 1
 outfile = open('result-12Peak.txt','w')
  
 outfile.write( "\n")
 outfile.write( "Point_Count: %s \n" % len(fft_y))
 outfile.write( 'ID  N     Value' + "\n")
 outfile.write( '--- ----- ---------------------------\n')
 
 print( "\n")
 print( "Point_Count: ", len(fft_y) , "\n")
 print( 'ID  N     Value')
 print( '--- ----- ---------------------------')
 for posOrNegPeaks in peaks:
     for peak in posOrNegPeaks:
         indexes.append(peak[0])         
         if i >= 2 and i < 13:
             print( '%-3i %-5i %s' % (i , peak[0], abs(peak[1])))
             outfile.write('%-3i %-5i %s \n' % (i , peak[0], abs(peak[1]))) 
         i += 1

 print( '--- ----- ---------------------------')
 outfile.write( '--- ----- ---------------------------')
 
 # 畫第3個圖
 plot_peaks(abs(fft_y), np.array(indexes),
      algorithm='FFT_PeakLoad')
 
 pylab.show()


