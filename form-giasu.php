<?php include 'header.php';?>
<main>
	<section class="form-giasu">
		<div class="container">
			<div class="info-form-gs">
				<div class="row">
					<div class="col-md-6">
						<div class="gs-left text-center">
							<div class="avarta-user">
								<input type='file' onchange="readURL(this);" id="up-file" style="display: none;" />
								<img id="blah" src="images/cmt.png" alt="your image" />
								<label for="up-file"><i class="fa fa-camera"></i></label>
							</div>
							<div class="info-avar-gs">
								<div class="item"><input type="text" class="inp_name" value="Nguyến Hoài An" readonly></div>
								<div class="item"><input type="text" class="school" readonly value="Sinh viên trường Đại học Ngoại Ngữ Hà Nội"></div>
							</div>
							<div class="box-cmnd">
								<input type='file' onchange="cmndURL(this);" id="up-cmnd" style="display: none;" />
								<img id="cmnd" src="images/cmt.png" class="img-fluid w-100" alt="your image" />
								<label for="up-cmnd" class="lab-upload">+</label>
							</div>
							<label for="up-cmnd" class="btn-upload text-center">Thêm thẻ CMND hoặc thẻ sinh viên</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box-form">
							<h3>Thông tin cá nhân</h3>
							<div class="list-form">
								<div class="row"> 
									<div class="col-md-8">
										<div class="item">
											<label for="">Họ và tên</label>
											<input type="text" placeholder="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<div class="row">
											<div class="col-md-6">
												<div class="item">
													<label for="">Năm sinh</label>
													<input type="text" placeholder="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="item">
													<label for="">Giới tính</label>
													<select name="" id="">
														<option value="">Nam</option>
														<option value="">Nữ</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<div class="item">
											<label for="">Email</label>
											<input type="text" placeholder="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<div class="item">
											<label for="">Số điện thoại</label>
											<input type="text" placeholder="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<div class="row">
											<div class="col-md-6">
												<div class="item">
													<label for="">Gia sư môn</label>
													<input type="text" placeholder="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="item">
													<label for="">Lớp</label>
													<select name="" id="">
														<option value="">1</option>
														<option value="">2</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="item">
											<label for="">Mô tả năng lực bản thân</label>
											<textarea name="" class="w-100" id="" cols="30" rows="10"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="item">
											<input type="submit" value="Cập nhật thông tin">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="gs-hot">
		<div class="item-gs-hot">
			<div class="avarta"><img src="images/teach-1.png" class="img-fluid" alt=""></div>
			<div class="info">
				<h3>Nguyễn Hoài An</h3>
				<h5>Sinh viên trươngf đại học bách khoa</h5>
				<ul class="list-inline">
					<li class="list-inline-item">1998</li>
					<li class="list-inline-item">3.5 (20 lượt đánh giá)</li>
				</ul>
			</div>
		</div>
	</section>
</main>
<style>
	footer {
		display: none;
	}
</style>
<?php include 'footer.php';?> 