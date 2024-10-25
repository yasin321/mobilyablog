
    $.servicesCategoryDetail = (id) => {
        $.post(site_url + "/admin/services_category_detail", {"id": id}, function (cevap) {

            if (cevap.durum == "basarili") {
                console.log("deneme");
                $("#sevices_category_modal").modal("show");
                $("#services_category_update").html(cevap.cikti);
                $('.dropify').dropify();
            }

        }, 'json');

    }
    $.servicesCategory = (id) => {
        $.post(site_url + "/admin/services_category_detail", {"id": id}, function (cevap) {

            if (cevap.durum == "basarili") {
                console.log("deneme");
                $("#sevices_category_modal").modal("show");
                $("#services_category_update").html(cevap.cikti);
                $('.dropify').dropify();
            }

        }, 'json');

    }
