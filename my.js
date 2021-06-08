let mystey = function (x, y) {
    if(x==y)
    {
        console.log(x);
    }
    else {
        if(x>y)
        {
            x=x-y;
        }
        else if(x<y)
        {
            y= y-x;
        }
        mystey(x,y);
    }
}

mystey(2437,875);
