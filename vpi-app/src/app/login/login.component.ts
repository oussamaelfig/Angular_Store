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

  constructor(private bd: BdService) { }

  ngOnInit(): void {
  }

  //exemple de comment utiliser le service avec un get.
  users: any = this.bd.getUser().subscribe((res) => {
    this.users = res;
    console.log(this.users.body);
    return res.body;
  });
  setUser() {
    this.bd.getUser().subscribe((res) => {
      this.users = res;
      console.log(this.users.body);
      return res.body;
    });
    console.log(this.users.body)
  }

  validerLogin() {
    if (this.validerNonVide(this.identifiant.value) || this.validerNonVide(this.motDePasse.value)) {
      //regarder le role de s
      let cpt = 0;
      //regarder avec si correspond entre les users[i].username -> si oui, on regarde le role et on crée un cookie avec valeur role. else -> return false
      while(cpt < this.users.length){
        if(this.identifiant.value == this.users[cpt].username &&
          this.motDePasse.value == this.users[cpt].motdepasse){
            //set cookie avec le role
            //renvoyer vers la nouvelle page.
        }
        ++cpt;
      }
      alert("Identifiant et/ou mot de passe invalide(s)");
    } else {
      alert("you good");
    }
    //this.bdService.getUser();

    //besoin du service pour aller chercher json et comparer le contenu par la suite
  }

  validerNonVide(entree: string) {
    return !(entree.length == 0)
  }


  validerId() {
    if (this.identifiant.value == '') {
      return false;
    }
    return true;
    //besoin du service pour aller chercher json et comparer le contenu par la suite
  }

  validerPass() {
    if (this.motDePasse.value == '') {
      return false;
    }
    return true;
  }
}
