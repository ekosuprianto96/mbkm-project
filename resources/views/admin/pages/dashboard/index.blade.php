@extends('admin.layouts.main')
<style>
    .select2-selection__rendered {
        height: 100%
    }
</style>
@section('content')
<div class="row">
    
</div>
<script>
    $('#meta_keywords').select2({
        tags: true
    });

    $(function() {
        'use strict';
    })
</script>
@endsection