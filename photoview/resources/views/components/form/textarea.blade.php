<div class="form-group">
    {{ Form::label($name, null, ['class' => 'badge badge-light control-label']) }}
    {{ Form::textarea($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>