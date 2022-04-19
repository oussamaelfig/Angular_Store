import { Component, OnInit } from '@angular/core';
import { FormControl } from '@angular/forms';
import {FormsModule, ReactiveFormsModule} from '@angular/forms';


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

  constructor() { }

  ngOnInit(): void {
  }

}
