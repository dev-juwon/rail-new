@if (session()->has('alert.message'))
  <div class="alert alert-{{ session()->get('alert.style') }} alert-dismissible fade in show" role="alert">
    <button type="button"
            class="close"
            data-dismiss="alert"
            aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>

    {!! session()->get('alert.message') !!}
  </div>
@endif

<style>

.alert {
    padding: 10px;
    margin: 10px;
    border-radius: 30px;
    font-color: #fff;
}

 .alert-error {
    background: rgb(173, 67, 67);

}

 .alert-danger {
    background: rgb(168, 133, 133);
    
}

 .alert-success {
    background: rgba(153, 203, 153, 0.63);
    
}

 .alert-info {
    background: rgba(162, 162, 194, 0.549);
}

 .alert-warning {
    background: rgb(190, 190, 154);
    
}
</style>