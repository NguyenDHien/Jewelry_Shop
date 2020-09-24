// $body = $("body");

// function showMainImg(imgs) {
//     var expandImg = document.getElementById("main-img");
//     expandImg.src = imgs.src;
// }
//<![CDATA[
if (address_2 = localStorage.getItem('address_2_saved')) {
    $('select[name="calc_shipping_district"] option').each(function () {
        if ($(this).text() == address_2) {
            $(this).attr('selected', '')
        }
    })
    $('input.billing_address_2').attr('value', address_2)
}
if (district = localStorage.getItem('district')) {
    $('select[name="calc_shipping_district"]').html(district)
    $('select[name="calc_shipping_district"]').on('change', function () {
        var target = $(this).children('option:selected')
        target.attr('selected', '')
        $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
        address_2 = target.text()
        $('input.billing_address_2').attr('value', address_2)
        district = $('select[name="calc_shipping_district"]').html()
        localStorage.setItem('district', district)
        localStorage.setItem('address_2_saved', address_2)
    })
}
$('select[name="calc_shipping_provinces"]').each(function () {
    var $this = $(this),
        stc = ''
    c.forEach(function (i, e) {
        e += +1
        stc += '<option value=' + e + '>' + i + '</option>'
        $this.html('<option value="">Tỉnh / Thành phố</option>' + stc)
        if (address_1 = localStorage.getItem('address_1_saved')) {
            $('select[name="calc_shipping_provinces"] option').each(function () {
                if ($(this).text() == address_1) {
                    $(this).attr('selected', '')
                }
            })
            $('input.billing_address_1').attr('value', address_1)
        }
        $this.on('change', function (i) {
            i = $this.children('option:selected').index() - 1
            var str = '',
                r = $this.val()
            if (r != '') {
                arr[i].forEach(function (el) {
                    str += '<option value="' + el + '">' + el + '</option>'
                    $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>' + str)
                })
                var address_1 = $this.children('option:selected').text()
                var district = $('select[name="calc_shipping_district"]').html()
                localStorage.setItem('address_1_saved', address_1)
                localStorage.setItem('district', district)
                $('select[name="calc_shipping_district"]').on('change', function () {
                    var target = $(this).children('option:selected')
                    target.attr('selected', '')
                    $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                    var address_2 = target.text()
                    $('input.billing_address_2').attr('value', address_2)
                    district = $('select[name="calc_shipping_district"]').html()
                    localStorage.setItem('district', district)
                    localStorage.setItem('address_2_saved', address_2)
                })
            } else {
                $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>')
                district = $('select[name="calc_shipping_district"]').html()
                localStorage.setItem('district', district)
                localStorage.removeItem('address_1_saved', address_1)
            }
        })
    })
})
//]]>
// function getProdDetail(id) {
//     $.ajax({
//         type: "get",
//         url: `http://localhost:8080/BachKhoaAP/Jewelry_Shop/api/product/${id}`,
//         data: "data",
//         dataType: "json",
//         success: function (data) {
//             prodsDetail(id);
//             $('#id').text(data.id);
//             $('#setPriceSale').text(data.price);
//             $('#setPrice').text(data.price);
//             $('#setName').text(data.name);
//             if (!(data.description)) {
//                 $('#setDes').text('');
//             } else {
//                 $('#setDes').text(data.description);
//             }
//             $('.image-thumb1').attr('src', `../../public/uploads/prods/${data.image}`);
//             if (data.discount === 0) {
//                 $('.detail-price').html(`
// 						<span class="price">$${data.price}</span>
// 						`)
//             } else {
//                 $('.detail-price').html(`
// 						<span id="setPriceSale" class="price_sale">$${ parseInt(data.price-(data.price*data.discount)/100) }</span>
// 										<div id="hide-jq"><span class="dash">/</span>
// 											<del id="setPrice" class="price_compare">$${data.price}</del>
// 										</div>
// 						`)
//             }

//         }
//     });
// }

// function prodsDetail(id) {
//     $.ajax({
//         type: "get",
//         url: `http://localhost:8080/BachKhoaAP/Jewelry_Shop/api/productDt/${id}`,
//         data: "data",
//         dataType: "json",
//         success: function (data) {
//             $('.image-remove').remove();
//             $('.color-op').remove();

//             $.each(data, function (index) {
//                 $('.product-image-thumb').append(`
// 						<div class="image-thumb-tab image-remove">
// 							<img class="image-thumb" onclick="showMainImg(this);" src="../../public/uploads/prods/${data[index].image}" alt=""/>
// 						</div>
// 						`);
//                 getColor(data[index].color_id);
//                 getSize(data[index].size_id);
//             });


//         }
//     });
// }

// function getColor(id) {
//     $.ajax({
//         type: "get",
//         url: `http://localhost:8080/BachKhoaAP/Jewelry_Shop/api/color/${id}`,
//         data: "data",
//         dataType: "json",
//         success: function (data) {
//             console.log(data.name);
//             $('.color-select').append(`
// 						<option class="color-op" value="black">${data.name}</option>
// 						`);
//         }
//     });
// }

// function getSize(id) {
//     $.ajax({
//         type: "get",
//         url: `http://localhost:8080/BachKhoaAP/Jewelry_Shop/api/size/${id}`,
//         data: "data",
//         dataType: "json",
//         success: function (data) {
//             console.log(data.name);
//             $('.size-select').append(`
// 						<option class="color-op" value="black">${data.name}</option>
// 						`);
//         }
//     });
// }
