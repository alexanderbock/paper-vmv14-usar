function mapmap
    figure
    hold on
    [h1,h1,h1] = map(0.1, 'blue');
    [h2,h2,h2] = map(0.2, 'red');
    [h3,h3,h3] = map(0.3, 'green');
    [h4,h4,h4] = map(0.4, 'cyan');
    [h5,h5,h5] = map(0.5, 'magenta');
    [h6,h6,h6] = map(0.75, 'yellow');
    [h7,h7,h7] = map(1.0, 'black');
    
%    legend('Location', 'SouthEast')
legend([h1,h2,h3,h4,h5,h6,h7], {'0.1','0.2','0.3','0.4','0.5','0.75','1.0'}, 'Location', 'NorthWest')
    %legend('0.1','0.1','0.1','0.2','0.2','0.2','0.3','0.3','0.3','0.4','0.4','0.4','0.5','0.5','0.5','1.0','1.0','1.0')
end