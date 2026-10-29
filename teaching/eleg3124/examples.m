% Some simple commands to show how to use Matlab

% the following two commands are equivalent
xa = linspace(1, 10, 10);
xb = [1:10];

% display the help information of the linespace function
help linspace

% the following two commands are equivalent
ya = linspace(0.1, 1, 10)
yb = [0.1:0.1:1];

ya(3) % the 3rd element of ya
xa([3,5]) % the 3rd and 5th elements of xa
xa([3:5]) % the 3rd, 4th, and 5th elements of xa

xa.*ya % element-wise multiplication
xa./ya % element-wise element division


xa.^2 % element-wise sqaured

xa+ya % element-wise summation
xa*3 % a vector  multiplies a scalar
xa/2 % a vector divided by a scalar

% plot 
% in red color, with marker o, and line style -.
plot(xa, ya, 'ro-.', 'linewidth', 2, 'markersize', 5)

help plot

% for loop
for k = 2:2:10
    x(k) = k^2;
end


% if else
% y = 1, if x > 0
% y = 0.5, if x == 0
% y = 0, if x < 0
x = [-5:0.1:5];
for k = 1:length(x)
    if x(k) < 0
        y(k) = 0;
    elseif x(k) == 0
        y(k) = 0.5;
    else
        y(k) = 1;
    end
end

positive_logic = (x > 0);
negative_logic = (x < 0);
zero_logic = (x==0);

y(positive_logic) = 1;
y(negative_logic) = 0;
y(x==0) = 0.5;



