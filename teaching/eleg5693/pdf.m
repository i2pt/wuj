function [y, x] = pdf(s)
% FUNCTIOM [Y, X] = PDF(S)
%     [y, x] = pdf(s)
%     s the data to be analyzed, it should take the form of a vector, and its contents is real
%     y the Probability Density Function (pdf) of s, it is a function of x
%     x the variable of the pdf
%
%     Compute the Probability Density Function (pdf) of a group of data with the help of
%     the Matlab function hist
%     
%     Author: Jingxian Wu
%     Organization: University of Missouri - Columbia
%     Construction Date: Feb. 07, 2001
%

if nargin ~= 1
   error('usage: [y, x] = pdf(s)');
end

% the range of s will be divided into N_res sub ranges, when this value is too big
% there will be fluctuations. when it is too small, the pdf will not be smooth.
N_res = 40;

% the total number of elements in s
N_s = length(s);
max_s = max(s);
min_s = min(s);
delta_range = (max_s-min_s)/N_res;

[histy, x] = hist(s, N_res);

if delta_range ~= 0
   y = histy/(N_s*delta_range);
else
   y = histy/N_s;
end


