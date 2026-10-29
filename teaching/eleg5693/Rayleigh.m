function fading = Rayleigh_xia02(Ns, Fd, Ts)
% FUNCTION FADING = RAYLEIGH_xia02(Ns, Fd, Ts)
%    Fd : Maxmimum Doppler Frequency
%    Ts : Sampling Interval
%    Ns : the number of samples in the fading
%
%    the same as Rayleigh1I.m, only a litter quicker
%    not proper for generating long Rayleigh fading sequences
%    Generate Rayleigh fading with the Zheng's new simulation model
%
%    Author: Jingxian Wu
%    Organization: University of Missouri - Columbia
%    Construction Date: Feb. 28, 2002
%
%    Rev 1.1  (Apr. 10, 2002)
%  

if nargin ~= 3
   error('3 input parameters are expected: Fd, Ts, Ns');
end

M = 16;
n = [1:M];

theta = (2*rand-1)*pi;
phi = (2*rand(1,M)-1)*pi;
psi = (2*rand(1,M)-1)*pi;
alpha = (2*pi*n-pi+theta)/(4*M);
omega_d = 2*pi*Fd;
t = [0:Ns-1]*Ts;

omega_t = omega_d*cos(alpha)'*t;
phase_c = omega_t + phi.'*ones(1, Ns);
phase_s = omega_t + psi.'*ones(1, Ns);

Uc = sum(cos(phase_c))/sqrt(M);
Us = sum(sin(phase_s))/sqrt(M);

fading = Uc + j*Us;

