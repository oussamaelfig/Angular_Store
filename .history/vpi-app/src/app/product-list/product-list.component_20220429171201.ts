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
  items = this.bdService.getProduits();
  dataSource: any;

  observer2: any = this.bd.getUser().subscribe((res) => {
    this.dataSource = res.body;
    console.log(this.dataSource);
    this.dataSource = new MatTableDataSource(this.dataSource);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
  });

  constructor(private bdService: BdService) {}

  ngOnInit(): void {}
}
