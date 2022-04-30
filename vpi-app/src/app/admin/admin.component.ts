import { Component, OnInit } from '@angular/core';
import { FormControl } from '@angular/forms';
import { BdService } from '../bd.service';
import { MatPaginator } from '@angular/material/paginator';
import { MatSort } from '@angular/material/sort';
import { MatTableDataSource } from '@angular/material/table';
import { AfterViewInit, ViewChild } from '@angular/core';

@Component({
  selector: 'app-admin',
  templateUrl: './admin.component.html',
  styleUrls: ['./admin.component.css']
})
export class AdminComponent implements OnInit, AfterViewInit{
  //valeurs possibles des roles
  u:string = "user";
  a:string = "admin";

  //Pour Mat table
  @ViewChild(MatSort) sort!: MatSort;
  @ViewChild(MatPaginator) paginator!: MatPaginator;

  //Pour gerer les json et sauvegarder les users
  savestatus = "";
  candidats:any;
  users:any;
  dataSource:any

  //FormControl variable pour creation usager
  nom = new FormControl('');
  prenom = new FormControl('');
  motDePasse = new FormControl('');
  identifiant = new FormControl('');
  role = new FormControl('');
  private idMin:number = 11;

  //Observers pour aller chercher le contenu des jsons.
  observer2:any = this.bd.getUser().subscribe((res) => {
    this.dataSource = res.body;
    console.log(this.dataSource);
    this.dataSource = new MatTableDataSource(this.dataSource);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
  });

  //Inititalisation de users
  observer:any = this.bd.getUser().subscribe((res) => {
    this.users = res.body;
    console.log(this.users);
    console.log(this.dataSource);
    //this.dataSource.sort = this.sort;
  });

  //aller chercher les candidats ds tpapp
  observer3:any = this.bd.getCandidats().subscribe((res) => {
    this.candidats = res.body.data;
  });

  //Validation du formulaire pour nouvel usager
  validerForm(){
    console.log(this.candidats);
    if(this.validerNom() && this.validerPrenom && this.validerId()
    && this.validerMotDePasse() && this.validerRole()){
      this.ajouter();
    }else{
      console.log("erreur lors de la validation. Corrigez ces erreurs.");
    }
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
      alert("Le prénom est trop court.");
      return false;
    }
    return true
  }

  private validerId(){
    if(this.identifiant.value == '' || this.identifiant.value.length < 8){
      alert("Entrez un identifiant valide de plus de 8 caractères de long.");
      return false;
    }
    return true;
  }

  private validerMotDePasse(){
    if(this.motDePasse.value == '' || this.motDePasse.value.length < 8){
      alert("Entrez un mot de passe valide de plus de 8 caractères de long.");
      return false;
    }
    return true;
  }

  private validerRole(){

    if(this.role.value == ''){
      alert("Choississez un rôle pour l'usager.");
      return false;
    }
    return true;
  }

  ngAfterViewInit() {
    //this.dataSource.paginator = this.paginator;
    console.log(this.paginator);
    //this.dataSource.sort = this.sort;
    console.log(this.sort);
  }


  constructor(private bd:BdService) {}

  //Pour material table
  colonneAfficher:string[] = ['id', 'username', 'motdepasse', 'nom', 'prenom', 'role', 'delete'];

  //Methode pour ajouter creer un nouvel usager et l'envoyer sur le serveur
  ajouter(){
    let nouvel:Usager = {
      username:this.identifiant.value,
      motdepasse:this.motDePasse.value,
      id:this.idMin,
      nom:this.nom.value,
      prenom:this.prenom.value,
      role:this.role.value
    };
    ++this.idMin;
    this.users.push(nouvel);
    let datatosave = this.users;
    let filename = "usagers.json";
    let obs = this.bd.postData(datatosave, filename)
    .subscribe(
      (data: any) => this.savestatus = data

    );
    alert("L'utilisateur a été créé avec succès. Les changements seront appliqués la prochaine fois que vous revenez.");
  }

  creerUsager(){

  }

  //retirer l'usager selectionner de la liste
  retirer(user:Usager){
    console.log(user);
    console.log(this.users[3].id);
    for(let i = 0; i < this.users.length; ++i){
      if(this.users[i].id == user.id){
        console.log(user);
        console.log(this.users[3].id);
        this.users.splice(i,1); //retire l'element du tab. A post sur le serveur.
        let datatosave = this.users;
        let filename = "usagers.json";
        let obs = this.bd.postData(datatosave, filename)
          .subscribe(
          (data: any) => this.savestatus = data
        );
        alert("Usager supprimé. Les changements seront appliqués la prochaine fois que vous revenez.")
        console.log(this.users);
      }
    }
  }

  ngOnInit(){}
}
export interface Usager {
  username: string;
  motdepasse: string;
  id: number;
  nom: string;
  prenom: string;
  role: string;
}
