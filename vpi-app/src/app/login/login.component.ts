import { Component, OnInit } from '@angular/core';
import { FormControl } from '@angular/forms';
import { BdService } from '../bd.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  identifiant = new FormControl('');
  motDePasse = new FormControl('');

  constructor(private bdService:BdService) { }

  ngOnInit(): void {
  }

  validerLogin(){
    if(!this.validerId() || !this.validerPass()){
      alert("Identifiant et/ou mot de passe invalide(s)");
    }else{
      alert("you good");

    }
    //this.bdService.getUser();

    //besoin du service pour aller chercher json et comparer le contenu par la suite
  }

  validerId(){
    if(this.identifiant.value == ''){
      return false;
    }
    return true;
    //besoin du service pour aller chercher json et comparer le contenu par la suite
  }

  validerPass(){
    if(this.motDePasse.value == ''){
      return false;
    }
    return true;
  }
}
