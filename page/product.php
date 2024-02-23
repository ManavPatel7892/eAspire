<?php include('../layout/header.php'); ?>
<style>
    .product-img {
        width: 100%;
        height: 655px;
        object-fit: cover;
    }

    .product-info {
        position: absolute;
        top: 519px;
        display: flex;
        align-items: center;
        height: 199px;
        font-size: 89px;
        color: #fff;
        left: 132px;
    }

    .product-header-line {
        position: absolute;
        top: 681px;
        left: 137px;
        border-top: 0.5px solid #fff;
        box-sizing: border-box;
        width: 477px;
    }

    .product-info2 {
        padding-left: 40px;
        padding-right: 40px;
    }

    .forFresh-info {
        padding-left: 40px;
        padding-right: 40px;
    }

    .product-name {
        font-size: 34px;
        line-height: 24px;
        font-weight: 600;
        color: #19a2bf;
    }

    .product-under-line {
        width: 19%;
        border-bottom: 2px dashed #b4bcc2;
        padding: 5px;
    }

    .all-text-info {
        font-family: 'Inter';
    }

    .jobello-logo {
        width: 24%;
        margin-left: 247px;
    }

    .jobello-text {
        font-size: 21px;
        margin-top: 9px;
        text-transform: capitalize;
        line-height: 31px;
        color: #385566;
    }

    .jobello-text-2 {
        font-size: 21px;
        margin-top: 27px;
        text-transform: capitalize;
        line-height: 31px;
        color: #385566;
    }

    .product-jebello-image {
        width: 686px;
        height: 450px;
        object-fit: cover;
        margin-top: 29px;
        margin-bottom: 10px;
        margin-left: 58px;
    }

    .mask-group-icon1 {
        position: absolute;
        top: 0;
        left: 0;
        width: 671px;
        height: 385px;
        object-fit: cover;
    }

    .for-product {
        width: 100%;
        height: 91%;
        object-fit: cover;
        margin-top: 29px;
        margin-bottom: 10px;
        margin-left: -40px;
    }

    .forFresh-text {
        font-size: 21px;
        margin-top: 187px;
        text-transform: capitalize;
        line-height: 31px;
        color: #385566;
    }

    .value-info {
        padding-left: 40px;
        padding-right: 40px;
    }

    .hear-are-some-info {
        padding-left: 40px;
        padding-right: 40px;
    }

    .for-product-image-3 {
        width: 686px;
        height: 392px;
        object-fit: cover;
        margin-top: 29px;
        margin-bottom: 10px;
        margin-left: 58px;
    }

    .jobello-text-info {
        font-size: 21px;
        margin-top: 187px;
        text-transform: capitalize;
        line-height: 31px;
        color: #385566;
    }

    .for-product-image-4 {
        width: 686px;
        height: 392px;
        object-fit: cover;
        margin-top: 29px;
        margin-bottom: 10px;
        margin-left: -40px;
    }

    .here-are-some {
        font-weight: 600;
        color: #385566;
        font-size: 22px;
    }

    .hear-text-info {
        /* padding: 38px; */
        margin-top: 66px;
    }

    .text-info-4,
    .easy-to-use,
    .search-info,
    .easy-info {
        font-size: 18px;
        margin-top: 187px;
        text-transform: capitalize;
        line-height: 26px;
        color: #385566;
    }

    .last-text-info {
        padding-left: 40px;
        padding-right: 40px;
        margin-bottom: 40px;
    }

    .affordable-text,
    .al-text,
    .reduced-text,
    .multiple-info {
        font-size: 18px;
        margin-top: 187px;
        text-transform: capitalize;
        line-height: 26px;
        color: #385566;
    }

    .for-product-image-5 {
        border-radius: 40px 0 0 320px;
        left: 698px;
        width: 695px;
        height: 413px;
        object-fit: cover;
        margin-left: 49px;
        margin-top: 61px;
    }

    .last-info {
        margin-top: 73px;
    }


    @media only screen and (max-width: 1024px) {
        .product-jebello-image {
            width: 100%;
            height: 51%;
            margin-top: 135px;
            margin-left: 35px;
        }

        .product-under-line {
            width: 30%;
        }

        .product-header-line {
            width: 367px;
        }

        .jobello-logo {
            margin-left: 183px;
        }

        .for-product {
            height: 58%;
            margin-top: 155px;
        }

        .forFresh-text {
            margin-top: 143px;
        }

        .for-product-image-3 {
            width: 430px;
            height: 249px;
            margin-top: 57px;
        }

        .jobello-text-info {
            margin-top: 104px;
        }

        .for-product-image-4 {
            width: 503px;
            height: 292px;
            margin-top: 140px;
        }

        .for-product-image-5 {
            width: 439px;
            height: 245px;
            margin-top: 119px;
        }
    }

    @media only screen and (max-width: 820px) {
        .product-jebello-image {
            height: 31%;
            margin-top: 201px;
        }

        .jobello-logo {
            margin-left: 148px;
        }

        .product-under-line {
            width: 129px;
        }

        .product-header-line {
            width: 358px;
        }

        .jobello-text-2 {
            font-size: 18px;
        }

        .jobello-text {
            font-size: 18px;
        }

        .for-product {
            height: 66%;
            margin-top: 86px;
        }

        .forFresh-text {
            font-size: 17px;
        }

        .forFresh-text {
            margin-top: 54px;
        }

        .for-product-image-3 {
            width: 328px;
            height: 189px;
            margin-top: 69px;
        }

        .jobello-text-info {
            margin-top: 79px;
        }

        .for-product-image-4 {
            width: 403px;
            height: 228px;
            margin-top: 174px;
        }

        .text-info-4,
        .easy-to-use,
        .search-info,
        .easy-info {
            font-size: 16px;
            line-height: 22px;
        }

        .for-product-image-5 {
            width: 336px;
            height: 190px;
            margin-top: 161px;
        }
    }

    @media only screen and (max-width: 768px) {
        .product-jebello-image {
            height: 28%;
        }

        .for-product {
            height: 61%;
        }

        .for-product-image-3 {
            width: 305px;
            height: 179px;
        }

        .for-product-image-4 {
            width: 376px;
            height: 213px;
        }

        .for-product-image-5 {
            width: 321px;
        }

        .product-under-line {
            width: 126px;
        }
    }

    @media only screen and (max-width: 767px) {
        .product-info {
            left: 7px;
            top: 125px;
            font-size: 56px;
        }

        .product-header-line {
            left: 14px;
            width: 242px;
            top: 259px;
        }

        .product-img {
            height: 209px;
        }

        .product-jebello-image {
            height: 75%;
            margin-top: 64px;
            margin-left: 0px;
        }

        .for-product {
            height: 67%;
            margin-left: 0px;
        }

        .product-under-line {
            width: 131px;
        }

        .for-product-image-3 {
            width: 332px;
            height: 190px;
            margin-left: 0px;
        }

        .for-product-image-4 {
            margin-top: 79px;
            margin-left: 0px;

        }

        .for-product-image-5 {
            width: 334px;
            margin-left: 0px;

        }
    }
</style>


<div class="product-main">
    <div class="product">
        <img class="product-img" alt="" src=" ../public/assets/images/producthome.png" />
        <img class="header-child-group" alt="" src=" ../public/assets/images/group-13@2x.png">
        <div class="product-info">Product</div>
        <div class="product-header-line"></div>
    </div>
    <div class="product-info2">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="product-name mt-5">Product</div>
                <div class="product-under-line"></div>
                <img class="jobello-logo" alt="" src="../public/assets/images/jobello-logo-2@2x.png" id="jobelloLogo2">
                <div class="all-text-info">
                    <div class="jobello-text">
                        JOBELLO is a digital platform that connects fresh graduates with
                        corporates India. It provides a unique and customized process for
                        corporates to connect with the best talent from all over India.
                    </div>
                    <div class="jobello-text-2">
                        The platform has a number of features that make it an ideal
                        solution for both corporates and fresh graduates. For corporates,
                        JOBELLO provides access to all categories of colleges pool talent,
                        with the ability to filter candidates by location, Percentage
                        skills,and Project experience. This Platform is equipped with ATS,
                        Al-based Assessment and Interview process that facilitates the
                        entire process of hiring.
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img class="product-jebello-image" alt="" src=" ../public/assets/images/product 1.png" />

            </div>
        </div>
    </div>


    <div class="forFresh-info">
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="for-product" alt="" src="../public/assets/images/product 2.png">

            </div>
            <div class="col-12 col-md-6">
                <div class="forFresh-text">
                    For Fresh Graduates, JOBELLO provides a platform to showcase their
                    skills and a experience to potential employers &amp; Also Help them to
                    Prepare for an Interview &amp; Land there in Dream Jobs. The platform
                    also provides a number of resources to help fresh graduates
                    prepare for interviews and land their dream job.
                </div>
            </div>
        </div>
    </div>

    <div class="value-info">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="jobello-text-info">
                    JOBELLO is a valuable resource for both corporates and fresh
                    graduates. It is a simple,effective, and affordable way to connect the
                    best talent with the best companies.
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img class="for-product-image-3" alt="" src="../public/assets/images/product 3.png">

            </div>
        </div>
    </div>

    <div class="hear-are-some-info">
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="for-product-image-4" alt="" src="../public/assets/images/mask-group@2x.png">
            </div>

            <div class="col-12 col-md-6">
                <div class="hear-text-info">
                    <div class="here-are-some">Here are some of the benefits of using JOBELLO:</div>
                    <div class="text-info-4 mt-3">JOBELLO has a database of millions of fresh graduates from
                        all over the India. This gives corporates the ability to
                        find the best talent, regardless of location.</div>
                    <div class="easy-to-use mt-3">Digital Platform:JOBELLO Has A Fully Digitization Process From Sourcing Pool To Final Selection.</div>
                    <div class="search-info mt-3">Customized Search: JOBELLO Allows Corporates To Customize Their Search Criteria. This Means That They Can Find Candidates With The Specific Skills And Experience That They Need.</div>
                    <div class="easy-info mt-3">Easy To Use: JOBELLO Is A User-Friendly Platform That Is Easy Navigate. This Makes It Easy For Both Corporates And Fresh Graduates To Use The Platform.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="last-text-info">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="last-info">
                    <div class="affordable-text mt-3">Affordable: JOBELLO Is An Affordable Solution For Both Corporates And Fresh Graduates. This Makes It Aviable Option For Businesses Of All Sizes.</div>
                    <div class="al-text mt-3">Al Based Selection: JOBELLO Allows Al Based Interview, Interview Assessments, MIS And Many More. This Means That You Have Automation Over Your Hiring Needs With JD.</div>
                    <div class="reduced-text mt-3">Reduced The Gap: JOBELLO Fills The Gap Between Both Corporates And Fresh Graduates, To Fulfil Their Achievements.</div>
                    <div class="multiple-info mt-3">Multiple Savings: JOBELLO Is An Affordable Solution In Terms Of Cost, Time And Processes.</div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img class="for-product-image-5" alt="" src="../public/assets/images/product 5.png">

            </div>
        </div>
    </div>
</div>


<?php include('../layout/footer.php'); ?>





 