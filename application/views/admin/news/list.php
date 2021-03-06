<div class="content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
				<div class="card">
					<div class="content">
						<h3 class="page-title">
							Quản lý tin tức
						</h3>
						<ul class="breadcrumb">
							<li>
								<a href="<?=base_url('admin')?>">Trang chủ</a>
							</li>
							<li class="active">
								Quản lý bài viết
							</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
				<div class="card">
					<div class="content">
						<div class="body collapse in" style="margin: 0 0 15px">
							<a href="<?=base_url('admin/news/add?type='.$type.'&post_type='.$post_type)?>" class="btn btn-info btn-fill btn-wd">Thêm mới</a>
						</div>
						<div class="widget red">
							<div class="widget-title">
								<h4>Quản lý bài viết</h4>
							</div>
							<div class="widget-body table-responsive">
								<table class="table table-striped table-bordered" id="sample_1">
									<thead>
									<tr>
										<th>ID</th>
										<th>Tiêu đề</th>
										<th>Preview</th>
										<th>Lượt xem</th>
										<th>Hành động</th>
									</tr>
									</thead>
									<form method="GET" action="<?=@$base?>">
										<tr>
											<td></td>
											<td><input type="text" class="form-control" placeholder="Tiêu đề" name="title" value="<?=@$name?>"></td>
											<td></td>
											<td></td>
											<td style="text-align: center"><button type="submit" class="btn btn-fill btn-default">Tìm kiếm</button></td>
										</tr>
									</form>
									<tbody>
									<?php if($list) foreach ($list as $item) {?>
										<tr class="odd gradeX">
											<td><?=@$item->id?></td>
											<td><?=@$item->title?> <img src="<?=base_url(@$item->thumb)?>" width="18px" height="18px" class="img-circle"></td>
											<td>
												<?php if ($item->type == 'other' || $item->post_type == 'post') {?>
												<a href="<?=@base_url('post/'.$item->alias)?>" class="btn btn-fill btn-sm btn-info" target="_blank">Xem</a></h4>
												<?php } else {?>
												<a href="<?=base_url($item->type.'/'.$item->post_type.'/'.$item->alias)?>" class="btn btn-fill btn-sm btn-info" target="_blank">Xem</a></h4>
												<?php }?>
											<td><?=@$item->count_view?></td>
											<td style="text-align: center"><a href="<?=@base_url('admin/news/edit/'.$item->id)?>"><i class="fa fa-pencil"></i> Sửa</a> | <a href="<?=@base_url('admin/news/delete/'.$item->id.'?type='.@$item->type.'&post_type='.$item->post_type)?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" ><i class="fa fa-trash"></i> Xóa</a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div style="padding-left: 400px" class="clearfix pagination"><?php echo $page_links?></div>
				</div>
				<!-- END PAGE CONTAINER-->
			</div>
			<!-- END PAGE -->
		</div>
	</div>
</div>