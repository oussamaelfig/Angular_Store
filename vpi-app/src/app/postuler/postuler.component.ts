import { Component, OnInit } from '@angular/core';
import { FormControl } from '@angular/forms';
import {Router} from '@angular/router';

@Component({
  selector: 'app-postuler',
  templateUrl: './postuler.component.html',
  styleUrls: ['./postuler.component.css']
})
export class PostulerComponent implements OnInit {
  nom = new FormControl('');
  prenom = new FormControl('');
  date = new FormControl('');
  courriel = new FormControl('');
  constructor(private router: Router) { }

  ngOnInit(): void {
  }

  private validerNom(){
    if(this.nom.value == '' || /\d/.test(this.nom.value)){
      alert("Le nom est invalide");
      return false;
    }
    if(this.nom.value.length < 4){
      alert("Le nom est trop court");
      return false;
    }
    return true
  }

  private validerPrenom(){
    if(this.prenom.value == '' || /\d/.test(this.prenom.value)){
      alert("Le prénom est invalide");
      return false;
    }
    if(this.prenom.value.length < 4){
      alert("Le prénom est trop court");
      return false;
    }
    return true
  }

  validerCourriel(){
    if(this.courriel.value == '' || !/^\S+@\S+\.\S+$/.test(this.courriel.value)){
      alert("Entrez une adresse courriel valide");
      return false;
    }
    return true;
  }

  private validerDate(){
    if(this.date.value == '' ){
      alert("La date de naissance est obligatoire");
      return false;
    }
    return true;
  }

  validerPostuler(){
    this.validerNom();
    this.validerPrenom();
    this.validerDate();
    this.validerCourriel();
    //If all vrai -> ecrire dans json
    this.router.navigateByUrl('/merci');
  }
}
