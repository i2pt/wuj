function hex = signeddec2hex(signed_dec, n_bits)
% function hex = signeddec2hex(signed_dec, n_bits)
%
% convert a signed decimal number to it's 2's complement representation
% input: 
%   signed_dec: a vector containing signed decimal numbers
%   n_bits: how many bits are going to be used to represent the signed
%           decimal numbers. (1 bit used for sign, n-1 bits used for
%           aplitude)
%           IMPORTANT: 2^(n_bits - 1) >= max(abs(signed_dec)) must be
%           satisfied
% output:
%           the 2's complement representation of the signed decimal in
%           the format of a matrix of hexadecimal letters.
%           (# of number x # of hexadecimal digits)
%

max_value = 2^(n_bits-1);

if (max_value < max(abs(signed_dec)))
    error('try a larger n_bits!');
end

signed_dec = floor(signed_dec);

% number of hexadecimal digits per decimal number
n_hex_digits = ceil(n_bits/4);

hex_string = '';

for k = 1:length(signed_dec)
    if signed_dec(k) >= 0
        hex(k, :) = dec2hex(signed_dec(k), n_hex_digits);
    else
        hex(k, :) = dec2hex(max_value*2+signed_dec(k), n_hex_digits);
    end
    
    temp_str = strcat(['0x', hex(k, :), ', ']);
    hex_string = strcat(hex_string, temp_str);
   
end

hex_string



   