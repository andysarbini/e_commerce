<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Province;
use App\Models\Regency;

use App\Models\HomeCategory;
use Livewire\Component;

class AdminHomeCategoryComponent extends Component
{
    public $selected_categories;
    // public $numberofproducts;
    public $country;
    public $regencies = [];
    public $regency;

    public function mount()
    {
        $category = HomeCategory::find(1);
        $this->selected_categories = explode(',', $category->sel_categories); // pengaruh
        $this->numberofproducts = $category->no_of_products;
        // $this->selected_categories = "one";
    }

    public function updateHomeCategory()
    {
       
        // dd($this->selected_categories);
        $category = HomeCategory::find(1);
        $category->sel_categories = implode(',',$this->selected_categories);
        $category->no_of_products = $this->numberofproducts;
        $category->save();
        session()->flash('message','HomeCategory has been updated successfully');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-home-category-component',['categories'=>$categories])->layout('layouts.base');
        // if(!empty($this->country)) {
        //     $this->regencies = Regency::where('province_id', $this->country)->get();
        // }
        // $countries = Province::orderBy('name')->get();
        // return view('livewire.admin.admin-home-category-component', ['countries'=>$countries])->layout('layouts.base');
    }
}
