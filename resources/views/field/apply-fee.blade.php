@extends("field.table")

@section("ext-tr")
    <tr>
        <td colspan="6">
            <div class="input-group" style="width: 260px">
                <span class="input-group-addon input-group-addon-show">总金额</span>
                <input type="number"
                       step="0.01"
                       readonly
                       name="{{$name}}[_sum]"
                       value="{{ $data['_sum']??'' }}"
                       {{ $attributes }}
                       class="form-control apply-fee-sum">
                <span class="input-group-addon input-group-addon-show">元</span>
            </div>
        </td>
    </tr>
@endsection

@section("ext-btn")
    <button type="button" class="btn btn-primary make-summary">计算汇总</button>
@endsection

@section("script")
    <script>
        $(function () {
            $(".make-summary").click(function () {
                var sum = 0;
                $(".ApplyFee-fee").each(function () {
                    var value = parseFloat($(this).val());
                    if (value) {
                        sum += value;
                    }
                });
                $(".apply-fee-sum").val(sum.toFixed(2));
            });
        })
    </script>
@endsection
