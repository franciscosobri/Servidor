package com.boletin.persona.service;

import java.util.List;
import java.util.Optional;

import org.springframework.stereotype.Service;

import com.boletin.persona.model.Person;
import com.boletin.persona.repository.PersonRepository;

@Service
public class PersonaService {

	private final PersonRepository personRepository;
	
	public PersonaService(PersonRepository personRepository) {
		this.personRepository = personRepository;
	}
	
	public List<Person> listarTodas(){
		return personRepository.findAll();
	}
	
	public Optional<Person> buscarPorId(Integer id){
		return personRepository.findById(id);
	}
	
	public Person guardar(Person person) {
		return personRepository.save(person);
	}
	public void eliminar(Integer id) {
		personRepository.deleteById(id);
	}
}
