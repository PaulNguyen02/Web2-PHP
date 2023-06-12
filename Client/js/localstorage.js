var listprd = new Array();
function Addtocart(prd)
{
    if (localStorage.getItem("prd1") == null) 
    { //nếu storage chưa có thì thêm vô
        listprd.push(prd);
        localStorage.setItem('prd1', JSON.stringify(listprd));      
        localStorage.setItem('total', prd.price);    
    }
    else
    {
        var sum=parseInt(localStorage.getItem("total"));
        var getarr = JSON.parse(localStorage.getItem("prd1"));
        listprd = getarr;
        listprd.push(prd);
        localStorage.setItem('prd1', JSON.stringify(listprd)); 
        sum+=parseInt(prd.price);
        localStorage.setItem('total', sum);          
    }    
}  

function discard(i)
{
    var products = JSON.parse(localStorage.getItem("prd1"));
    products.splice(i, 1);
    localStorage.setItem('prd1', JSON.stringify(products));  
    localStorage.removeItem('total');
}

function Sum()
{
    var sum= localStorage.getItem("total");
    document.write(`<div style="color: red;">Chi phí ước tính: ${sum} USD</div>`);
}

function RendertoGrid()
{
    var list = JSON.parse(localStorage.getItem("prd1"));
    for(let i=0; i<list.length;i++)
    {
        document.write(`
        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1" onclick="clickon()">
        <div class="card"> <img class="card-img-top" src=${list[i].img}>
            <div class="card-body">
                <h6 class="font-weight-bold pt-1">${list[i].name}</h6>
                <div class="text-muted description">${list[i].id}</div>
                <div class="d-flex align-items-center justify-content-between pt-3">
                    <div class="d-flex flex-column">
                        <div class="h6 font-weight-bold">${list[i].price}</div>
                    </div>
                    <button id="detail" class='btn btn-primary m-r-1em'>Xem</button>
                    <script> 
                        $("#detail").click(function(){
                            clickon();
                        })
                    </script>
                    <button id="discard" class='btn btn-danger'>Bỏ</button>
                    <script> 
                        $("#discard").click(function(){
                            discard(${i});
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>  
        `);
    }
}

function RendertoList()
{
    var list = JSON.parse(localStorage.getItem("prd1"));
    for(let i=0; i<list.length;i++)
    {
        document.write(`
        <tr>
            <td><img class="card-img-top" src=${list[i].img}></td>
            <td>${list[i].id}</td>
            <td>${list[i].name}</td>
            <td>${list[i].price}</td>
            <td><button id="detail" class='btn btn-primary m-r-1em'>Xem</button></td>
            <script> 
                $("#detail").click(function(){
                    clickon();
                })
            </script>
            <td><button id="discard" class='btn btn-danger'>Bỏ</button></td>
            <script> 
                $("#discard").click(function(){
                    discard(${i});
                })
            </script>
        </tr>
        `);
    }
}

