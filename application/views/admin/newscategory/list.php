<div class="content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
				<div class="card">
					<div class="content">
						<h3 class="page-title">
							Quản lý danh mục tin tức
						</h3>
						<ul class="breadcrumb">
							<li>
								<a href="<?=base_url('admin')?>">Trang chủ</a>
							</li>
							<li class="active">
								Quản lý danh mục tin tức
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
							<a href="<?=base_url('admin/newscategory/add?type='.$type)?>" class="btn btn-info btn-fill btn-wd">Thêm mới</a>
						</div>
						<div class="widget red">
							<div class="widget-title">
								<h4>Quản lý danh mục tin tức</h4>
								<?php //print_r($result);?>
							</div>
							<div class="widget-body table-responsive">
								<table class="table table-striped table-bordered" id="sample_1">
									<thead>
									<tr>
										<th width='5%'>ID</th>
										<th width='35%'>Tên danh mục</th>
										<th width='35%'>Alias</th>
										<th width='25%'>Hành động</th>
									</tr>
									</thead>
									<form method="GET" action="<?=@$base?>">
										<tr>
											<td width='5%'></td>
											<td width='35%'><input type="text" class="form-control" placeholder="Tên danh mục" name="title" value="<?=@$title?>"></td>
											<td width='35%'></td>
											<td width='25%' style="text-align: center"><button type="submit" class="btn btn-fill btn-default">Tìm kiếm</button></td>
										</tr>
									</form>
									<tbody>
									<?php if (!empty($result)) foreach($result as $item){?>
										<tr class="odd gradeX">
											<td><?=@$item['id']?></td>
											<td><?php
												$indent = "";
												for ($i = 1; $i < $item['level']; $i++) {
													($i==1) ? $indent .= "|---" : $indent .= "---";
												}
												echo $indent.$item['title'];
											?></td>
											<td><?=@$item['alias']?></td>
											<td style="text-align: center"><a href="<?=@base_url('admin/newscategory/edit/'.$item['id'])?>"><i class="fa fa-pencil"></i> Sửa</a> | <a href="<?=@base_url('admin/newscategory/delete/'.$item['id'])?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" ><i class="fa fa-trash"></i> Xóa</a></td>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<div style="padding-left: 400px" class="clearfix pagination"><?php echo $page_links?></div>
					</div>
					
				</div>
				<!-- END PAGE CONTAINER-->
			</div>
			<!-- END PAGE -->
		</div>
	</div>
</div>