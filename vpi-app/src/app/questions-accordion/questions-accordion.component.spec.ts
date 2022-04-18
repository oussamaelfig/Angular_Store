import { ComponentFixture, TestBed } from '@angular/core/testing';

import { QuestionsAccordionComponent } from './questions-accordion.component';

describe('QuestionsAccordionComponent', () => {
  let component: QuestionsAccordionComponent;
  let fixture: ComponentFixture<QuestionsAccordionComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ QuestionsAccordionComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(QuestionsAccordionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
