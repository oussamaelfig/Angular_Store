import { Component, OnInit } from '@angular/core';
import { products } from '../products';
import { BdService } from '../bd.service';

@Component({
  selector: 'app-product-list',
  templateUrl: './product-list.component.html',
  styleUrls: ['./product-list.component.css'],
})
export class ProductListComponent implements OnInit {
  products: any = products;
items = this.bdService.getItems();
    dataSource:any

  observer2:any = getProduits().subscribe((res) => {
    this.dataSource = res.body;
    console.log(this.dataSource);
  }

  constructor() {}

  ngOnInit(): void {}
}
