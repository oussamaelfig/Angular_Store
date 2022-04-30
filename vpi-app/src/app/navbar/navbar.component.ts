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

  //verifie si un user est connecte
  valider() {
    this.bdService.verifierConnectUser();
  }

  //Verifie si un admin est connecter pour debloquer le menu admin
  checkAdmin(){
    return localStorage.getItem("utilisateur") == "admin";
  }
}
