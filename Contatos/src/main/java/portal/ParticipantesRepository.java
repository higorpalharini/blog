package portal;

import org.springframework.data.repository.PagingAndSortingRepository;
import org.springframework.data.rest.core.annotation.RepositoryRestResource;

@RepositoryRestResource( collectionResourceRel = "participantes", path = "participantes" )
public interface ParticipantesRepository extends PagingAndSortingRepository< Participantes, Long >{

}
