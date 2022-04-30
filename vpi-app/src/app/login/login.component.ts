import { Component, OnInit } from '@angular/core';
import { FormControl } from '@angular/forms';
import { BdService } from '../bd.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css'],
})
export class LoginComponent implements OnInit {
  identifiant = new FormControl('');
  motDePasse = new FormControl('');
  private utilisS: string = 'utilisateur';

  constructor(private bd: BdService, private router: Router) { }

  ngOnInit(): void { }

  //exemple de comment utiliser le service avec un get.
  users: any = this.bd.getUser().subscribe((res) => {
    this.users = res.body;
    console.log(this.users);
  });

  //inutile pour l'instant.... a retirer eventuellement
  setUser() {
    this.bd.getUser().subscribe((res) => {
      this.users = res;
      console.log(this.users.body);
      return res.body;
    });
    console.log(this.users.body);
  }

  //méthode pour ce connecter en verifiant les infos entrees par user
  //avec celle qui ce trouve dans le json sur le serveur tpapp au port 3001
  validerLogin() {
    if (
      this.validerNonVide(this.identifiant.value) &&
      this.validerNonVide(this.motDePasse.value)){
      let cpt = 0;
      console.log(this.users);
      while (cpt < this.users.length) {
        if (
          this.identifiant.value == this.users[cpt].username &&
          this.motDePasse.value == this.users[cpt].motdepasse
        ) {
          console.log(this.users);
          if (this.users[cpt].role == 'user') {
            localStorage.setItem(this.utilisS, 'user');
          } else if (this.users[cpt].role == 'admin') {
            localStorage.setItem(this.utilisS, 'admin');
          }
          this.router.navigateByUrl('/succes');
          return true;
        }
        ++cpt;
      }
      alert('Identifiant et/ou mot de passe invalide(s)');
      return false;
    } else {
      alert('Identifiant et/ou mot de passe invalide(s)');
      return false;
    }
  }

  //Vérifie que l'entree du champs envoye en argument n'est pas vide
  validerNonVide(entree: string) {
    return !(entree.length == 0);
  }
}
