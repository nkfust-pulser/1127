#-*- coding: utf-8 -*-
# encoding: utf-8
#from numpy import sin, linspace, pi, fft, arange
from pylab import *
from libs import peakdetect
import numpy as np
import sys
import os


'''def plot_peaks(x, indexes, algorithm=None, mph=None, mpd=None):
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
'''

def find_Peak(P):
    # Find peakload test
    Peakpoint = peakdetect.peakdetect(abs(P), lookahead=22)
    return Peakpoint
    
def plotSpectrum(y,Fs):
 """
 Plots a Single-Sided Amplitude Spectrum of y(t)
 """
 n = len(y) # length of the signal
 k = arange(n)
 T = n/Fs
 frq = k/T # two sides frequency range
 frqs = k/T
 frq = frq[range(n//36)] # one side frequency range
 frqs = frqs[range(n//2)]
 S = fft(y)/n
 S = S[range(n//2)]
 Y = fft(y)/n # fft computing and normalization
 Y = Y[range(n//36)]


 '''# output fft restule
 outfile = open('result.txt','w')
 for item in Y:
    outfile.writelines("%s\n" % abs(item))
 '''
 

 # FFT原始結果

 return Y

def plotSpectrum2(y,Fs):
 """
 Plots a Single-Sided Amplitude Spectrum of y(t)
 """
 n = len(y) # length of the signal
 k = arange(n)
 T = n/Fs
 frq = k/T # two sides frequency range
 frqs = k/T
 frq = frq[range(n//36)] # one side frequency range
 frqs = frqs[range(n//2)]
 S = fft(y)/n
 S = S[range(n//2)]
 Y = fft(y)/n # fft computing and normalization
 Y = Y[range(n//36)]


 '''# output fft restule
 outfile = open('result.txt','w')
 for item in Y:
    outfile.writelines("%s\n" % abs(item))
 '''
 
 newS = map(abs,S)

 return newS



script_dir = os.path.dirname(__file__)
rel_path = ("..\\%s.txt" %str(sys.argv[1]))
abs_file_path = os.path.join(script_dir, rel_path)
if __name__ == "__main__":
 y = [line.rstrip('\n') for line in open(abs_file_path,'r')]
 N = len(y) 
 Fs = 1024.0;  # sampling rate
 Ts = 1.0/Fs; # sampling interval
 t = arange(N)*Ts # time vector
 
 
 

 # fft 計算後找出頻譜的數值
 
 fft_y = plotSpectrum(y,Fs)
 thefft = plotSpectrum2(y,Fs)
 
 indexes = []
 peaks = find_Peak(fft_y)
 i = 1

 

 indexes2 = []
 numbers = []
 values = [] 
 for posOrNegPeaks in peaks:
     for peak in posOrNegPeaks:
         indexes.append(peak[0])
         if i >= 2 and i < 13:
            indexes2.append(i)
            numbers.append(peak[0])
            values.append(abs(peak[1]))
         i += 1


 print(len(fft_y))
 print(*indexes2)
 print(*numbers)
 print(*values)
 print(*thefft)
 print(*y)

 # 畫第3個圖
 
 



