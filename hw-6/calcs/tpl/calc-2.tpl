<form class="calc_2" name="calc-2" action="{{ACTION}}" method="get">
    <input name="x" type="number" value="{{X}}" placeholder="0">
    <div class="submit">
        <input type="submit" name="+" value="+">
        <input type="submit" name="-" value="-">
        <input type="submit" name="*" value="*">
        <input type="submit" name="/" value="/">
    </div>
    <input name="y" type="number" value="{{Y}}" placeholder="0">
    <input type="text" name="des" value="= {{RES}}" readonly>
    <span>{{MESSAGE}}</span>
</form>