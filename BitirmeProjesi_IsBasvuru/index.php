<?php
require_once 'baglan.php';
$baglan = baglan();

require_once 'Classes/PHPExcel.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <base href="">
    <title>Seven HTML Free - Bootstrap 5 HTML Multipurpose Light/Dark Admin Dashboard Theme by Keenthemes</title>
    <meta name="description" content="Seven admin dashboard live demo. Check out all the features of the admin panel. Light &amp; dark skins. A large number of settings, additional services and widgets." />
    <meta name="keywords" content="Seven, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Seven HTML Free - Bootstrap 5 HTML Multipurpose Light/Dark Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/products/seven-html-pro" />
    <meta property="og:site_name" content="Keenthemes | Seven HTML Free" />
    <link rel="canonical" href="Https://preview.keenthemes.com/seven-html-free" />
    <link rel="shortcut icon" href="./html/assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="./html/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="./html/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="./html/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>

<body>

    <script>var hostUrl = "./html/assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="./html/assets/plugins/global/plugins.bundle.js"></script>
		<script src="./html/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="./html/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="./html/assets/js/custom/widgets.js"></script>


    <p style="text-align: center;"> <br> <a style="background: darkgreen; color: aliceblue;" href="form.php"> İŞ BAŞVURUSU YAP </a> <br> </p>


    <?php

    $sirano = 0;
    $sorgu = $baglan->prepare("select * from application order by id asc");
    $sorgu->execute();
    $kayit = $sorgu->rowCount();
    echo '
        <div class="col-xl-13">
        <div class="card card-xl-stretch mb-7 mb-xl-6">
            <div class="card-header border-0 pt-10">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Başvurular</span>
                </h3>              
                <div class="d-flex flex-shrink-0">

                <span class="svg-icon svg-icon-success me-5">
                
                <span class="svg-icon svg-icon-1 svg-icon-success">
                    <svg xmlns="https://findicons.com/files/icons/2795/office_2013_hd/2000/excel.png" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16.7 12.7C17.1 12.3 17.1 11.7 16.7 11.3C16.3 10.9 15.7 10.9 15.3 11.3L11 15.6L8.70001 13.3C8.30001 12.9 7.69999 12.9 7.29999 13.3C6.89999 13.7 6.89999 14.3 7.29999 14.7L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="black" />
                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                    </svg>
                </span>
                
                </span>
                
                <div class="flex-grow-1 me-2">
                <a href="excel.php" class="fw-bolder text-gray-800 text-hover-primary fs-6 ">Excele Aktar</a>
                </div>
                
                </div>
                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Ara">

                <form  action="ara.php" method="GET" data-kt-search-element="form" class="w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
															<input type="hidden" />
															<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-5">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
																	<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
																</svg>
															</span>

															<input type="text" class="form-control form-control-solid ps-15" name="kelime" value="" placeholder="Search..." data-kt-search-element="input" />

															<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
																<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
															</span>

															<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
																<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																		<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
																	</svg>
																</span>
															</span>

                </form>
                

                </div>
            </div>

            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted">
                                
                                <th class="min-w-15px "> </th>
                                <th class="min-w-100px ">Ad Soyad</th>
                                <th class="min-w-100px ">Doğum Yeri</th>
                                <th class="min-w-100px ">Doğum Tarihi</th>
                                <th class="min-w-100px ">E-mail</th>
                                <th class="min-w-100px ">Cep Telefonu</th>
                                <th class="min-w-100px ">Ev Telefonu</th>
                                <th class="min-w-100px ">Okul Adı</th>
                                <th class="min-w-100px ">Mezuniyet Yılı</th>
                                <th class="min-w-100px ">Adres</th>
                                <th class="min-w-100px ">Cinsiyet</th>
                                <th class="min-w-100px ">Medeni Durumu </th>
                                <th class="min-w-100px ">Ehliyet</th>
                                <th class="min-w-100px ">Askerlik</th>
                                <th class="min-w-100px ">Kayıt Tarihi</th>
                                <th class="min-w-100px ">İşlemler</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            ';
                            foreach ($sorgu as $satir) {
                                $sirano++;
                               echo $id=$satir['id'];
                                echo '
                                            <tr>
                                    
                                            <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$sirano. ' </a>
                                                </div>
                                            </div>
                                        </td>

                                            <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['name'].' '.$satir['surname']. ' </a>
                                                </div>
                                            </div>
                                            </td>

                                            <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['birth_place'].' </a>
                                                </div>
                                            </div>
                                            </td>
                                            <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['date_of_birth'].' </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['email']. ' </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['mobile_phone']. ' </a>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['home_phone']. ' </a>
                                    </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['school_name']. ' </a>
                                    </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['graduation_year']. ' </a>
                                    </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['address']. ' </a>
                                    </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['gender']. ' </a>
                                    </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['civil_status']. ' </a>
                                    </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['driving_license']. ' </a>
                                    </div>
                                    </div>
                                    </td>

                                    <td>
                                    <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['soldiering']. ' </a>
                                    </div>
                                    </div>
                                    </td>

                                    <td>
                                    <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">' .$satir['application_date']. ' </a>
                                    </div>
                                    </div>
                                    </td>


                                <td>
                                '; echo ' 
                                    <div class="d-flex justify-content-end flex-shrink-0">

                                        <a href = "form.php?id='.$satir['id']. ' " class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"> 
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                </svg>
                                            </span>
                                            </a>

                                        <a href="sil.php?id='.$satir['id']. ' "  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            
                            ';}
                            echo'
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    //BURASI TAKVİM KISMI

    <div class="card card-xxl-stretch">
									<!--begin::Card header-->
									<div class="card-header">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bolder text-dark">My Calendar</span>
											<span class="text-muted mt-1 fw-bold fs-7">Preview monthly events</span>
										</h3>
										<div class="card-toolbar">
											<a href="#" class="btn btn-primary">Manage Calendar</a>
										</div>
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body">
										<!--begin::Calendar-->
										<div id="kt_calendar_widget_1"></div>
										<!--end::Calendar-->
									</div>
									<!--end::Card body-->
								</div>
            ';    



            $sorgu->closeCursor();
            unset($sorgu);

            ?>


    </div>
    </table> 
</body>

</html>