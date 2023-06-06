{This program was written by C Wu on 18/5/2021}
program Jellybeans_Jar (input,output);
var
jellybeans : integer;

begin
    {Input}
    writeln ('How much jellybeans do you think is in this jar?');
    readln (jellybeans);
    
    {Conditional Logic}
    if (jellybeans = 999)then
    begin
        writeln ('Congratulations you have won the jar of jellybeans');
    end
    else
    begin
        writeln ('Unfortunately, you have guessed the wrong number.');
        writeln ('You will now have to clean the classroom for a week.');
    end;
    
end.
