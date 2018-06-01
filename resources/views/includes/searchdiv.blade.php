                                <ul class="sub">
                                    <li>
                                        <input type="checkbox" id="s-area0">
                                        <label for="s-area0">全台北市</label>
                                    </li>
                                    <?php
                                    $data = app('App\Http\Controllers\printareaController')->index();
                                    foreach ($data as $key => $value) {
                                        echo '
                                        <li>
                                            <input type="checkbox" id="s-area'.$key.'">
                                            <label for="s-area1">'.$value->area_name.'</label>
                                        </li>
                                        ';
                                    }
                                    ?>
                                </ul>
<script>
$(document).ready(function() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: "POST",
        url: '/subcooke',
        data: {_token: CSRF_TOKEN},
        success: function( data ) {
            $.each(data, function(index, value) {
                $('#sub2').append('<li><input type="checkbox" id="s-genre1"><label for="s-genre'+index+'">'+value['food_name']+'</label></li>')
            });
        }
    });
    // alert('1');
    // $('#submit').on('submit', function (e) {
    //     e.preventDefault();
    //     var title = $('#title').val();
    //     var body = $('#body').val();
    //     var published_at = $('#published_at').val();
    // });
});
</script>
                        <ul class="main">
                            <li class="m-list">
                                <p class="mainList"><span>中式料理</span></p>
                            </li>
                            <li class="m-list is-active">
                                <p class="mainList"><span>日式料理</span></p>
                                <ul class="sub" id="sub2">
                                    <li>
                                        <input type="checkbox" id="s-genre0">
                                        <label for="s-genre0">全日式料理</label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
