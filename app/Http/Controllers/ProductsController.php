<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\ProductRepository;
use Illuminate\Http\Request;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * @var ProductRepository
     */
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $products = $this->repository->paginate();

        return view('admin.products.index', compact('products'));
    }
}
