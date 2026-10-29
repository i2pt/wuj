Fs = 40e3;
Ts = 1/Fs;
t = [0:Ts:1];

fc = 262;
fd = 294;
fe = 330;
ff = 349;
fg = 392;
fa = 440;
fb = 494;

f_vec = [fc, fd, fe, ff, fg, fa, fb];

for mm = 1:length(f_vec)
	xwave(mm, :) = cos(2*pi*f_vec(mm)*t);
end

sound(xwave(1, :), Fs);

if 1
while 1
    keyin = input('', 's')
    switch keyin 
        case '1'
            sound(xwave(1, :), Fs);
        case '2'
            sound(xwave(2, :), Fs);
        case '3'
            sound(xwave(3, :), Fs);
        case '4'
            sound(xwave(4, :), Fs);
        case '5'
            sound(xwave(5, :), Fs);
        case '6'
            sound(xwave(6, :), Fs);
        case '7'
            sound(xwave(7, :), Fs);
        otherwise
    end
           
end
end