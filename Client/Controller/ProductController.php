<?php
    class ProductController extends BaseController
    {
        private $productmodel;
        function __construct()
        {
            $this->model('ProductModel');
            $this->productmodel = new ProductModel(); 
        }
        function show()
        {                     
            $country = $this->productmodel->showallcountry();
            $brand = $this->productmodel->showallbrand();
            $products = $this->productmodel->show();
            return $this->view('listproduct', ['products' => $products, 'country' => $country, 'brand' => $brand ]);
        }
        function showbycategory()
        {           
            $country = $this->productmodel->showallcountry();
            $brand = $this->productmodel->showallbrand();
            $categorystr = $_GET['type'] ?? null;
            $products = $this->productmodel->showbycategory($categorystr);
            return $this->view('listproduct', ['products' => $products, 'country' => $country, 'brand' => $brand]);
        }
        function showbybrand()
        {
            $country = $this->productmodel->showallcountry();
            $brand = $this->productmodel->showallbrand();
            $branchecked = $_GET['brand'] ?? null;
            //$filterByBrand =  $branchecked;
            //$brand = "'".implode("','", $filterByBrand)."'";
            $products = $this->productmodel->showbybrand($branchecked);
            return $this->view('listproduct', ['products' => $products, 'country' => $country, 'brand' => $brand]);            
        }
        function showbycountry()
        {
            $country = $this->productmodel->showallcountry();
            $brand = $this->productmodel->showallbrand();
            $nation = $_GET['country'] ?? null;
            $products = $this->productmodel->showbycountry($nation);
            return $this->view('listproduct', ['products' => $products, 'country' => $country, 'brand' => $brand]);
        }
        function search()
        {
            $country = $this->productmodel->showallcountry();
            $brand = $this->productmodel->showallbrand();
            $search = $_POST['searchbox'] ?? null;
            $products = $this->productmodel->search($search);
            return $this->view('listproduct', ['products' => $products, 'country' => $country, 'brand' => $brand]);
        }
        function detail()
        {
            $id = $_GET['id'] ?? null;
            $products = $this->productmodel->detail($id);
            return $this->view('productdetail', ['products' => $products]);
        }
        function ascending()
        {
            $country = $this->productmodel->showallcountry();
            $brand = $this->productmodel->showallbrand();
            $products = $this->productmodel->ascending();
            return $this->view('listproduct', ['products' => $products, 'country' => $country, 'brand' => $brand]);
        }
        function descending()
        {
            $country = $this->productmodel->showallcountry();
            $brand = $this->productmodel->showallbrand();
            $products = $this->productmodel->descending();
            return $this->view('listproduct', ['products' => $products, 'country' => $country, 'brand' => $brand]);
        }
        function sort()
        {
            if(isset($_GET['val']))
            {
                if($_GET['val']=='asc')
                {
                    $this->ascending();
                }
                if($_GET['val']=='desc')
                {
                    $this->descending();
                }
            }
        }
    }
