function [h1,h2,h3] = map(factor, color)
    n = 10000;

    c = 0.5;
    w = 0.25;

    lower = c - w/2;
    upper = c + w/2;
    

    linear = 0:n;
    linear = linear / n;
    h1 = plot(((n*lower)-1:(n*upper)) / n, ((n*lower)-1:(n*upper)) / n, color, 'LineWidth', 1.5);

    % Lower
    lowerFunc = @(x) power(lower, 1-factor) * power(x,factor);
    lowerY = arrayfun(lowerFunc, (0:(n*lower))/n);
    h2 = plot((0:(n*lower))/n, lowerY, color, 'LineWidth', 2.0);
    
    % Upper
    upperA = (upper - 1) / (power(upper, 1/factor) - 1);
    upperFunc = @(x) (upperA * power(x, 1/factor) + ( 1 - upperA));

    upperY = arrayfun(upperFunc, (n*upper:n) / n);
    h3 = plot((n*upper:n) / n, upperY, color, 'LineWidth', 2.0);
end