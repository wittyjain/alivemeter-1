var count = "500";

function limiter()
{
var tex = document.myform.comment.value;
var len = tex.length;
var limit = count-len;

if(len > count)
{
        tex = tex.substring(0,count);
        document.myform.comment.value =tex;
        return false;
}

document.myform.limit.value =limit;
}


var count = "125";

function limiter1()
{
var tex = document.myform1.comment.value;
var len = tex.length;
var limit = count-len;

if(len > count)
{
        tex = tex.substring(0,count);
        document.myform.comment.value =tex;
        return false;
}

document.myform1.limit.value =limit;
}
