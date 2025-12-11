package com.boletin.persona.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.boletin.persona.model.Person;

public interface PersonRepository extends JpaRepository<Person, Integer> {

	
}
