<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Slide
            </header>

            <div class="panel-body">

                <div class="position-center">
                    <?php

                    // use Illuminate\Support\Facades\Session;

                    // $message = Session::get('message');
                    // if ($message) {
                    //     echo '<span class="text-message">' . $message . "</span>";
                    //     Session::put('message', null);
                    // }
                    ?>
                    <form role="form" action='saveSlide' method="post" enctype="multipart/form-data">
                        <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
                        <?php 
                            foreach ($data['slide'] as $key) {
                        ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu Đề Slide</label>

                            <input type="text" class="form-control" name="title" value="<?php echo $key->title; ?>"
                            id="exampleInputEmail1" placeholder="Tên Danh Mục">
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize: none" rows="8" name="description" class="form-control" id="exampleInputPassword1"></textarea>
                        </div> -->
                        <div class="form-group">
                            <label for="exampleInputFile">File Ảnh</label>
                            <input type="file" name="image" id="exampleInputFile3" value="<?php echo $key->image; ?>">
                            <p class="help-block">Vui lòng đăng file đuôi .jpg . Cảm ơn</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hiển Thị</label>
                            <select name="status" class="form-control input-sm m-bot15">
                                <option value="disable">Ẩn</option>
                                <option value="active">Hiển Thị</option>
                            </select>
                        </div>
                        <button type="submit" name="add_slide">Thêm Slide</button>
                        <?php } ?>
                    </form>
                </div>

            </div>
        </section>

    </div>

</div>