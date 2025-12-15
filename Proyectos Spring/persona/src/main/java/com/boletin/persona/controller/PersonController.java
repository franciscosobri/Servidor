package com.boletin.persona.controller;

import java.util.List;

import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;

import com.boletin.persona.model.Person;
import com.boletin.persona.service.PersonaService;

public class PersonController {
	
	private final PersonaService personaService;
	
	public PersonController(PersonaService personaService) {
		this.personaService = personaService;
	}
	
	//listado
	@GetMapping
	public List<Person> listar() {
		return personaService.listarTodas();
	}
	
	//mostrar por id
	@GetMapping("/{id}")
	public ResponseEntity<Person> obtener(@PathVariable Integer id){
		return personaService.buscarPorId(id)
	}

}
