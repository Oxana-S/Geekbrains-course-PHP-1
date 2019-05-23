<form class="calc_1" name="calc-1" action="{{ACTION}}" method="get">
    <input name="x" type="number" value="{{X}}" placeholder="0">
    <select name="operand">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input name="y" type="number" value="{{Y}}" placeholder="0">
    <input type="submit" name="submit" value="=">
    <span>{{RES}}</span>
</form>