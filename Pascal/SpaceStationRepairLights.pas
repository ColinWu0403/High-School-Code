{This program was written by C Wu on 10/5/2021}
program Space_Station (input,output);
var

Battery : string;
Heat_Exc : string;
Water_Pump : string;
Temp_Sens : string;

error_code : integer;

LED_Color1 : string;
LED_Color2 : string;
LED_1 : integer;
LED_2 : integer;

begin
    {Input Statements}
    
    writeln ('Status of International Space Station Systems: ');
    writeln ('|--------------------------------------------|');
    writeln ('Enter WORKING if the system is working');
    writeln ('Enter BROKEN if the system is broken');
    writeln ('Enter the status for the Battery');
    readln (Battery);
    writeln ('Enter the status for the Heat Exchanger');
    readln (Heat_Exc);
    writeln ('Enter the status for the Water Pump');
    readln (Water_Pump);
    writeln ('Enter the status for the Temperature Sensor');
    readln (Temp_Sens);
    writeln ('|--------------------------------------------|');
    
    {Logic for LEDs}
    
    {off}
    
    begin
        if (Battery = 'WORKING') and (Heat_Exc = 'WORKING')then
        LED_1 := 0;
    end;
    begin
    if (Water_Pump = 'WORKING') and (Temp_Sens = 'WORKING')then
        LED_2 := 0;
    end;
    
    {red}
    
    begin
    if (Battery = 'WORKING') and (Heat_Exc = 'BROKEN')then
        LED_1 := 1;
    end;
    begin
    if (Water_Pump = 'WORKING') and (Temp_Sens = 'BROKEN')then
        LED_2 := 1;
    end;
    
    {green}
    
    begin
    if (Battery = 'BROKEN') and (Heat_Exc = 'WORKING')then
        LED_1 := 2;
    end;
    begin
    if (Water_Pump = 'BROKEN') and (Temp_Sens = 'WORKING')then
        LED_2 := 2;
    end;
    
    {blue}
    
    begin
    if (Battery = 'BROKEN') and (Heat_Exc = 'BROKEN')then
        LED_1 := 3;
    end;
    begin
    if (Water_Pump = 'BROKEN') and (Temp_Sens = 'BROKEN')then
        LED_2 := 3;
    end;
    
    {Error Code}
    
    if (Battery = 'WORKING') and (Heat_Exc = 'WORKING') and (Water_Pump = 'WORKING') and (Temp_Sens = 'WORKING')then
    begin
        error_code := 0;
    end
    else
    begin
        error_code := ((LED_1 * 4) + LED_2);
    end;
    
    
    {Output Number Logic}
    
    if (error_code = 0)then
    begin
        LED_Color1 := 'off';
        LED_Color2 := 'off';
    end;
    
    if (error_code = 1)then
    begin
        LED_Color1 := 'off';
        LED_Color2 := 'red';
    end;

    if (error_code = 2)then
    begin
        LED_Color1 := 'off';
        LED_Color2 := 'green';
    end;
    
    if (error_code = 3)then
    begin
        LED_Color1 := 'off';
        LED_Color2 := 'blue';
    end;
    
    {------------------------}
    
    if (error_code = 4)then
    begin
        LED_Color1 := 'red';
        LED_Color2 := 'off';
    end;

    if (error_code = 5)then
    begin
        LED_Color1 := 'red';
        LED_Color2 := 'red';
    end;
    
    if (error_code = 6)then
    begin
        LED_Color1 := 'red';
        LED_Color2 := 'green';
    end;

    if (error_code = 7)then
    begin
        LED_Color1 := 'red';
        LED_Color2 := 'blue';
    end;
    
    {------------------------}
    
    if (error_code = 8)then
    begin
        LED_Color1 := 'green';
        LED_Color2 := 'off';
    end;
    
    if (error_code = 9)then
    begin
        LED_Color1 := 'green';
        LED_Color2 := 'red';
    end;
    
    if (error_code = 10)then
    begin
        LED_Color1 := 'green';
        LED_Color2 := 'green';
    end;
    
    if (error_code = 11)then
    begin
        LED_Color1 := 'green';
        LED_Color2 := 'blue';
    end;
    
    {------------------------}
    
    if (error_code = 12)then
    begin
        LED_Color1 := 'blue';
        LED_Color2 := 'off';
    end;

    if (error_code = 13)then
    begin
        LED_Color1 := 'blue';
        LED_Color2 := 'red';
    end;
    
    if (error_code = 14)then
    begin
        LED_Color1 := 'blue';
        LED_Color2 := 'green';
    end;

    if (error_code = 15)then
    begin
        LED_Color1 := 'blue';
        LED_Color2 := 'blue';
    end;
    
    {Output}
    
    writeln ('The status of the ISS systems are :');
    writeln (LED_Color1,' ',LED_Color2);
end.
