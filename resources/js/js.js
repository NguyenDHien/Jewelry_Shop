$body = $("body");

function showMainImg(imgs) {
    var expandImg = document.getElementById("main-img");
    expandImg.src = imgs.src;
}

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
