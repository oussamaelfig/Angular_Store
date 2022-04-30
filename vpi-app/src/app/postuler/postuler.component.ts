import { Component, OnInit } from '@angular/core';
import { FormControl } from '@angular/forms';
import { Router } from '@angular/router';
import { BdService } from '../bd.service';

@Component({
  selector: 'app-postuler',
  templateUrl: './postuler.component.html',
  styleUrls: ['./postuler.component.css']
})
export class PostulerComponent implements OnInit {
  //Variable pour le form control
  nom = new FormControl('');
  prenom = new FormControl('');
  date = new FormControl('');
  courriel = new FormControl('');

  //Pour sauvegarder la valeur
  savestatus = "";
  candidats:any;

  constructor(private router: Router, private bd:BdService) { }

  ngOnInit(): void {
  }

  //Methodes de validation du formulaire de postulation et de ses champs.
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

  //Valide le tout et post le nouvel utilisateur sur le serveur tpapp
  validerPostuler(){
    if(this.validerNom() && this.validerNom() && this.validerPrenom()
    && this.validerDate() && this.validerCourriel()){
      let candi:Candidat ={
        nom:this.nom.value,
        prenom:this.prenom.value,
        date:this.date.value,
        courriel:this.courriel.value
      }
      console.log(this.candidats);
      this.candidats.push(candi);
      let datatosave = this.candidats;
      let filename = "candidats.json";
      let obs = this.bd.postData(datatosave, filename)
      .subscribe(
        (data: any) => this.savestatus = data
      );
      this.router.navigateByUrl('/merci');
    }else{
      console.log("Erreur lors de postulation. Veuillez recommencer");
    }
  }
}

//Attributs qu'un obj candidats possede
export interface Candidat{
  nom:string;
  prenom:string;
  date:string;
  courriel:string;
}
