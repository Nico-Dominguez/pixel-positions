{{-- tag.blade.php --}}
@props(['tag', 'size' => 'base' ])

<div class="debug-info" style="color: red;">
    Raw attributes: {{ print_r($attributes->all(), true) }}<br>
    Tag variable exists: {{ isset($tag) ? 'yes' : 'no' }}<br>
    @if(isset($tag))
        Tag type: {{ gettype($tag) }}<br>
        Tag content: {{ print_r($tag, true) }}
    @endif
</div>