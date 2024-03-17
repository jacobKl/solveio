import { ApiResponse, ScrambleResponse } from './../types/interfaces';

class Api {
    async get(url: string, queryParams: object): Promise<ApiResponse> {
        try {
            const result = await fetch(`/api/${url}`)
            const json = await result.json()
            return {
                hasError: false,
                result: json
            };
        } catch (error) {
            console.error("Wystąpił błąd.")
            return {
                hasError: true,
            }
        }
    }

    async post(url: string, body: {}, headers: {} = {}): Promise<ApiResponse> {
        const formData = new FormData();

        for (const [key, value] of Object.entries(body)) {
            formData.append(key, value);
          }

        try {
            const result = await fetch(`/api/${url}`, {
                method: "POST",
                body: formData,
                headers: {
                    ...headers
                }
            })
            const json = await result.json()
            return {
                hasError: false,
                result: json
            };
        } catch (error) {
            console.error("Wystąpił błąd.")
            return {
                hasError: true,
            }
        }
    }

    async newScramble() {
        const { hasError, result } = await this.get('new-scramble', {})

        return {
            hasError,
            ...result
        }
    }

    async submitSolve(solveTime: number) {
        const { hasError, result } = await this.post(
            'new-solve',
            {
                solveTime
            }
        );
    }
}

const api = new Api();

export default api;
