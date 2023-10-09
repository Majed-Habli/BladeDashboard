@props(['options' => []])
<div>
<select id='chartTypeSelector' @change="$emit('send-data', $event.target.value)">
    @foreach($options as $optionValue)
        <option $value=`{{ $optionValue[`id`] }}` {{ $optionValue[`id`] ? 'selected' : '' }} >{{ $optionValue['name'] }}</options>
    @endforeach
</select>
<script>
    document.addEventListener('DOMContentLoaded', function() {

    const selectElement = document.getElementById('chartTypeSelector');

    selectElement.addEventListener('change', function() {
        const selectedValue = this.value;

        console.log('Selected Value:', selectedValue);
    });
});

</script>
</div>