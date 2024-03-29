<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/Admim/css/bootstrap1.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/Admim/css/datepicker3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/Admim/css/styles.css')}}">
    <script src="{{ asset('JS/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('JS/js/lumino.glyphs.js') }}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
#navbar{
	margin-top:50px;}
#tbl-first-row{
	font-weight:bold;}
#logout{
	padding-right:30px;}		
</style>
</head>
<body>
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Admin</a>
                <ul class="user-menu">
                    <?php  
                        if( Session::get('TenNVSS')!=null ){
                    ?>

                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                        {{Session::get('TenNVSS')}} 
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                        
                                <li>
                                    <a href="{{URL::to('DangXuat')}}"> 
                                        <svg class="glyph stroked cancel">
                                        <use xlink:href="#stroked-cancel">
                                        </use>
                                    </svg>Đăng xuất</a>
                                </li>
                        </ul>
                    </li>
                    <?php  } ?>
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>

     <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li role="presentation" class="divider"></li>
            <li>
                <a href="{{ URL('Admim/TrangChu') }}">
                    <svg class="glyph stroked dashboard-dial">
                        <use xlink:href="#stroked-dashboard-dial">
                            
                        </use>
                    </svg> Trang chủ
                </a>
            </li>
            <li>
                <a href="{{ URL('Admim/SanPham/DanhSach') }}">
                    <svg class="glyph stroked calendar">
                        <use xlink:href="#stroked-calendar">
                            
                        </use>
                    </svg> Sản phẩm
                </a>
                </li>
            <li>
                <a href="{{ URL('Admim/TheLoai/DanhSach') }}">
                    <svg class="glyph stroked line-graph">
                        <use xlink:href="#stroked-line-graph">
                            
                        </use>
                    </svg> Thể Loại
                </a>
            </li>
            <li class="active">
                <a href="{{ URL('Admim/TaiKhoan/DanhSach') }}">
                    <svg class="glyph stroked male-user">
                        <use xlink:href="#stroked-male-user"/>
                    </svg> Tài khoản
                </a>
            </li>
            <li role="presentation" class="divider"></li>
        </ul>
    </div><!--/.sidebar-->
                    
    <div class="row">
    	<div class="col-sm-12">
        	<div class="alert alert-success">Added user success!</div>
        	<table class="table table-striped">
            	<tr id="tbl-first-row">
                	<td width="5%">#</td>
                    <td width="29%">Fullname</td>
                    <td width="23%">Username</td>
                    <td width="25%">Email</td>
                    <td width="6%">Level</td>
                    <td width="6%">Edit</td>
                    <td width="6%">Delete</td>
                </tr>
                <tr>
                	<td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>nguyenvana</td>
                    <td>nguyenvana@gmail.com</td>
                    <td>2</td>
                    <td><a href="edit.php" class="btn btn-warning">Sửa</a></td>
                    <td><a href="#" class="btn btn-danger">Xóa</a></td>
                </tr>
                <tr>
                	<td>2</td>
                    <td>Lê Thị B</td>
                    <td>lethib</td>
                    <td>lethib@gmail.com</td>
                    <td>2</td>
                    <td><a href="edit.php" class="btn btn-warning">Sửa</a></td>
                    <td><a href="#" class="btn btn-danger">Xóa</a></td>
                </tr>
                <tr>
                	<td>3</td>
                    <td>Nguyễn Văn A</td>
                    <td>nguyenvana</td>
                    <td>nguyenvana@gmail.com</td>
                    <td>2</td>
                    <td><a href="edit.php" class="btn btn-warning">Sửa</a></td>
                    <td><a href="#" class="btn btn-danger">Xóa</a></td>
                </tr>
                <tr>
                	<td>4</td>
                    <td>Lê Thị B</td>
                    <td>lethib</td>
                    <td>lethib@gmail.com</td>
                    <td>2</td>
                    <td><a href="edit.php" class="btn btn-warning">Sửa</a></td>
                    <td><a href="#" class="btn btn-danger">Xóa</a></td>
                </tr>
                <tr>
                	<td>5</td>
                    <td>Nguyễn Văn A</td>
                    <td>nguyenvana</td>
                    <td>nguyenvana@gmail.com</td>
                    <td>2</td>
                    <td><a href="edit.php" class="btn btn-warning">Sửa</a></td>
                    <td><a href="#" class="btn btn-danger">Xóa</a></td>
                </tr>
                <tr>
                	<td>6</td>
                    <td>Lê Thị B</td>
                    <td>lethib</td>
                    <td>lethib@gmail.com</td>
                    <td>2</td>
                    <td><a href="edit.php" class="btn btn-warning">Sửa</a></td>
                    <td><a href="#" class="btn btn-danger">Xóa</a></td>
                </tr>
			</table>
            <div class="btn btn-primary">
                    <a style="color:white;text-decoration: none;" href="add.php">Thêm tài khoản</a>
            </div>
            <div aria-label="Page navigation">
            	<ul class="pagination">
                	<li>
                    	<a aria-label="Previous" href="#">
                        	<span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li>
                    	<a href="#" aria-label="Next">
        					<span aria-hidden="true">&raquo;</span>
      					</a>
      				</li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>
