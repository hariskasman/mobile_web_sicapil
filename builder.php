<html>
<script type="text/javascript">
function show()
{
    muncul = window.open("about:blank", "munculah");
    muncul.document.write(x);
}
</script>

<body>
<textarea style="height:400px;width:750px;overflow:auto;" onblur="x=this.value"></textarea><br />
<button onclick="show()">Preview!</button>
</body>
</html>

