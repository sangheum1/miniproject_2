<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/application/view/css/main.css">
</head>
<body>
	<?php if(isset($this->loginFlg)) { ?>
		<a href="/user/logout">로그아웃</a>
        <a href="/user/modify">정보수정</a>
	<?php } else {?>
		<a href="/user/login">로그인</a>
		<a href="/user/regist">회원가입</a>
	<?php }?>






    <!-- 캐러셀-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://cdn.pixabay.com/photo/2017/06/21/20/51/tshirt-2428521_960_720.jpg" class="d-block w-100 mh-70" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2015/08/25/11/50/shop-906722_960_720.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2017/08/06/22/52/blouse-2597205_960_720.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>







    <!-- 네비게이션-->

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BestShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Man</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">TOP</a></li>
                    <li><a class="dropdown-item" href="#">SHIRTS</a></li>
                    <li><a class="dropdown-item" href="#">PANTS</a></li>
                    <li><a class="dropdown-item" href="#">OUTER</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Woman</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">TOP</a></li>
                    <li><a class="dropdown-item" href="#">BLOUSE</a></li>
                    <li><a class="dropdown-item" href="#">PANTS</a></li>
                    <li><a class="dropdown-item" href="#">OPS&SKIRT</a></li>
                    <li><a class="dropdown-item" href="#">OUTER</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">A/S</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">C/S</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notice</a>
                </li>
                
                <!-- <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
                </li> -->
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    

    <div class="container-xxl">
        <div class="row row-cols-xxl-4 row-cols-lg-3">
            <div class="col d-flex justify-content-center pt-3 pb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2016/12/19/21/36/woman-1919143_1280.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2020/07/11/16/16/jeans-5394561_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2018/03/12/22/15/clothing-3221103_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center pt-3 pb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2016/03/27/19/31/fashion-1283863_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!-- 모달 -->
    <!-- <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        구매하기
    </button> -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">상품 구매</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				김정은 티셔츠
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
				<button type="button" class="btn btn-success">장바구니에 담기</button>
				<button type="button" class="btn btn-primary">즉시 구매</button>
			</div>
			</div>
		</div>
	</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>