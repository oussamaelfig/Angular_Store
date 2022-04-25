import { Component, OnInit } from '@angular/core';
import { BdService } from '../bd.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css'],
})
export class NavbarComponent implements OnInit {
  constructor(private bdService: BdService) {}

  ngOnInit(): void {}

  valider(){
    this.bdService.verifierConnectUser();
  }

  itemCount() {
    return this.bdService.itemsCount();
  }
}
